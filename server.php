#!/usr/local/bin/php
<?php

if (1 != assert_options(ASSERT_ACTIVE) or 1 != assert_options(ASSERT_WARNING)):
    trigger_error('Assertion ignored');
endif;

// Create a tmp folder in actual project folder.
$return_var = 0;
echo passthru('mkdir -p '.getcwd().'/tmp', $return_var);
assert ('0 == $return_var');

$php_process = proc_open("env PHP_FCGI_CHILDREN=15 php-cgi -b 127.0.0.1:7233", array(), $pipes);

// Create the standard fastcgi_params file in tmp folder.
file_put_contents(getcwd()."/tmp/fastcgi_params", '
fastcgi_param  QUERY_STRING       $query_string;
fastcgi_param  REQUEST_METHOD     $request_method;
fastcgi_param  CONTENT_TYPE       $content_type;
fastcgi_param  CONTENT_LENGTH     $content_length;

fastcgi_param  SCRIPT_NAME        $fastcgi_script_name;
fastcgi_param  REQUEST_URI        $request_uri;
fastcgi_param  DOCUMENT_URI       $document_uri;
fastcgi_param  DOCUMENT_ROOT      $document_root;
fastcgi_param  SERVER_PROTOCOL    $server_protocol;
fastcgi_param  HTTPS              $https if_not_empty;

fastcgi_param  GATEWAY_INTERFACE  CGI/1.1;
fastcgi_param  SERVER_SOFTWARE    nginx/$nginx_version;

fastcgi_param  REMOTE_ADDR        $remote_addr;
fastcgi_param  REMOTE_PORT        $remote_port;
fastcgi_param  SERVER_ADDR        $server_addr;
fastcgi_param  SERVER_PORT        $server_port;
fastcgi_param  SERVER_NAME        $server_name;

# PHP only, required if PHP was built with --enable-force-cgi-redirect
fastcgi_param  REDIRECT_STATUS    200;
');

// Create nginx.conf in tmp folder.
file_put_contents(getcwd()."/tmp/nginx.conf", '
http {
    server {
      listen 8082;
      server_name localhost;
      default_type  application/octet-stream;

      root '.getcwd().';
      access_log '.getcwd().'/log/access.log;
      error_log '.getcwd().'/log/error.log;

        location ~ \.php$ {
            fastcgi_split_path_info ^(.+\.php)(/.+)$;
            try_files $uri =404;
            fastcgi_pass 127.0.0.1:7233;
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            include '.getcwd().'/tmp/fastcgi_params;
        }
    }
}

events {
    worker_connections  2048;
}
');

// Testing nginx script.
echo passthru('nginx -c '.getcwd().'/tmp/nginx.conf -t', $return_var);
assert ('0 == $return_var');
usleep(200000); echo "Launching Nginx\n";

// Launching nginx
echo passthru('nginx -c '.getcwd().'/tmp/nginx.conf', $return_var);
assert ('0 == $return_var');

// Waiting for a keypress in console...
passthru('read -p "Press any key to finish... " -n1 -s');

echo "\nShutting down Nginx\n";
echo passthru('nginx -c '.getcwd().'/tmp/nginx.conf -s stop', $return_var);
assert ('0 == $return_var');

echo "\nShutting down php-cgi (fcgi)\n";
$php_proc_terminate = proc_terminate($php_process);
$php_proc_close = proc_close($php_process);
assert(-1 != $php_proc_close);

?>