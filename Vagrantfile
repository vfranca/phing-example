# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
    config.vm.box = "w4studio/ubuntu-lamp"
    # config.vm.box_check_update = false
    config.vm.network "forwarded_port", guest: 80, host: 8070
    # config.vm.network "private_network", ip: "192.168.33.10"
    # config.vm.network "public_network"
    config.vm.synced_folder ".", "/var/www/html"
    config.vm.provider "virtualbox" do |vb|
        #   vb.gui = true
        vb.memory = "1024"
    end
    # config.push.define "atlas" do |push|
        #   push.app = "YOUR_ATLAS_USERNAME/YOUR_APPLICATION_NAME"
    # end
    config.vm.provision "shell", inline: <<-SHELL
        sudo apt-get -y install php5-xdebug
        sudo apt-get -y install webalizer
    SHELL
end
