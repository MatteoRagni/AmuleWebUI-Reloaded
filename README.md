# AmuleWebUI-Reloaded #

A web interface for amuleweb. Reloaded style using Bootstrap, Glyphicons and jQuery!

## Credits 

This work is entirely based upon the skeleton provided in `amuleweb` package for Debian. Besed on the work and the efforts of the main _aMule_ branch developers, _Bootstrap_, _Glyphicon_ and _jQuery_, I've decided to re-design the web interface. All is released under the _Gnu Public License_, and I'll be pleased if someone will decide to fork and improve my work.

## Structure 

The structure is completely equivalent to the old `amuleweb` interface, and mantains all it's functionalities. 

 * Login
 * Downloads/Uploads
 * Search
 * Servers
 * Kad bootstrap
 * Statistics
 * Preferences
 * Logging utilities
 * Ed2k link insertion

## Installation

To install the web interface simply clone the repo in a directory inside `/usr/share/amule/webserver` (tested on Debian-based distros):

``` bash
cd /usr/share/amule/webserver
sudo git clone https://github.com/MatteoRagni/AmuleWebUI-Reloaded
```

After, you need to edit configuration file of rempote interface:

``` bash
nano $HOME/.amule/remote.conf
```

```
...
[Webserver]
...
Template=AmuleWebUI-Reloaded
...
```

Now you have only to reload `amuleweb` process:

``` bash
kill $(pidof amuleweb) && amuleweb
```

Interface is available at address [http://localhost:4711](http://localhost:4711)

> If you desire to lower the project size, delete the comparison image with the command: 
> 
> `sudo rm -R /usr/share/amuleweb/webserver/AmuleWebUI-Reloaded/doc-images`  

## Comparison 

Here some screenshots for comparison purposes:

#### Login 

| Base | Reloaded |
| ---- | -------- |
| ![login](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Login.png "Base login") | ![login2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Login.png "Reloaded login") |

#### Download/Uploads

| Base | Reloaded |
| ---- | -------- |
| ![transfer](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Transfer.png "Base transfer") | ![transfer2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Transfer.png "Reloaded transfer") |

#### Search

| Base | Reloaded |
| ---- | -------- |
| ![search](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Search.png "Base search") | ![search2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Search.png "Reloaded search") |

#### Shared

| Base | Reloaded |
| ---- | -------- |
| ![shared](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Shared.png "Base shared") | ![shared2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Shared.png "Reloaded shared") |


#### Servers

| Base | Reloaded |
| ---- | -------- |
| ![servers](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Server.png "Base servers") | ![servers2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Server.png "Reloaded servers") |

#### Kad connections

| Base | Reloaded |
| ---- | -------- |
| ![Kad](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Kad.png "Base Kad") | ![Kad2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Kad.png "Reloaded Kad") |

#### Statistics

| Base | Reloaded |
| ---- | -------- |
| ![statistics](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Stats.png "Base statistics") | ![statistics2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Stats.png "Reloaded statistics") |

#### Preferences

| Base | Reloaded |
| ---- | -------- |
| ![preferences](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Prefs.png "Base preferences") | ![preferences2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Prefs.png "Reloaded preferences") |

#### Logging

| Base | Reloaded |
| ---- | -------- |
| ![logs](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/BasePic/Log.png "Base logs") | ![logs2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/raw/master/doc-images/ReloadPic/Logs.png "Reloaded logs") |