# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|

    config.vm.box = "scotch/box"
    config.vm.network "private_network", ip: "192.168.33.33"
    config.vm.hostname = "greenplatespecial.dev"

    config.vm.synced_folder "shared", "/shared/greenplate", :nfs => { :mount_options => ["dmode=777","fmode=666"] }

	config.vm.provider :virtualbox do |vb|
		vb.customize ["modifyvm", :id, "--memory", "2048"]
		vb.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
		vb.customize ["modifyvm", :id, "--natdnsproxy1", "on"]
		vb.name = "greenplate-vagrant"
	end

	config.vm.provision "shell", path: "provision.sh"

end