#!/usr/bin/env ruby

desc "Deploys current workspace to server"
task :deploy do
    %x{ bash -lc "
          ssh christian@192.168.1.229 'sudo chown -R christian /docker/wordpress/var/www/html'
          rsync -azv \
            ./roles/application/templates/var/www/html/ \
            christian@192.168.1.229:/docker/wordpress/var/www/html
          ssh christian@192.168.1.229 'sudo chown -R www-data /docker/wordpress/var/www/html'
        "
    }
end