# -*- mode: ruby -*-
# vi: set ft=ruby :

# All Vagrant configuration is done below. The "2" in Vagrant.configure
# configures the configuration version (we support older styles for
# backwards compatibility). Please don't change it unless you know what
# you're doing.
Vagrant.configure("2") do |config|
  config.vm.box = "ubuntu/focal64"


  config.vm.define "web" do |web| 
    web.vm.hostname = "web" 
    web.vm.network "forwarded_port", guest: 80, host: 8080, host_ip: "127.0.0.1" 
    web.vm.network "private_network", ip: "192.168.2.11"
    web.vm.provision "shell", path: "web_script.sh"
  end

  config.vm.define "db" do |db|
    db.vm.hostname = "db"
    db.vm.network "private_network", ip: "192.168.2.12"
    db.vm.provision "shell", path: "db_script.sh"
  end

  config.vm.define "admin" do |admin|
    admin.vm.hostname = "admin"
    admin.vm.network "forwarded_port", guest: 81, host: 8081, host_ip: "127.0.0.1" 
    admin.vm.network "private_network", ip: "192.168.2.13"
    admin.vm.provision "shell", path: "admin_script.sh"
  end

  
end
