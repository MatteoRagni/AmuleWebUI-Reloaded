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

## Comparison 

Here some screenshots for comparison purposes:

#### Login 

| Base | Reloaded |
| ---- | -------- |
| ![login](https://www.dropbox.com/s/ih4blod2tp4inf8/Login.png "Base login") | ![login2](https://www.dropbox.com/s/21xivcu7kg7xvt7/Login.png "Reloaded login") |

#### Download/Uploads

| Base | Reloaded |
| ---- | -------- |
| ![transfer](https://www.dropbox.com/s/lofkdwf6yfmbv45/Transfer.png "Base transfer") | ![transfer2](https://www.dropbox.com/s/5yb0igzbyvic5d8/Transfer.png "Reloaded transfer") |

#### Search

| Base | Reloaded |
| ---- | -------- |
| ![search](https://www.dropbox.com/s/ugotslmr6v17dqs/Search.png "Base search") | ![search2](https://www.dropbox.com/s/5bpz0bnv4efqe57/Search.png "Reloaded search") |

#### Shared

| Base | Reloaded |
| ---- | -------- |
| ![shared](https://www.dropbox.com/s/vlfuysd5zr8121i/Shared.png "Base shared") | ![shared2](https://www.dropbox.com/s/hgvi2rdc7nrl8cs/Shared.png "Reloaded shared") |


#### Servers

| Base | Reloaded |
| ---- | -------- |
| ![servers](https://www.dropbox.com/s/9yvscvgbkwoj8t1/Server.png "Base servers") | ![servers2](https://www.dropbox.com/s/sf157fgav9beioe/Server.png "Reloaded servers") |

#### Kad connections

| Base | Reloaded |
| ---- | -------- |
| ![Kad](https://www.dropbox.com/s/96df72fajx8udvg/Kad.png "Base Kad") | ![Kad2](https://www.dropbox.com/s/9dmcivjsh432iq1/Kad.png "Reloaded Kad") |

#### Statistics

| Base | Reloaded |
| ---- | -------- |
| ![statistics](https://www.dropbox.com/s/guu7fciugx9edy2/Stats.png "Base statistics") | ![statistics2](https://www.dropbox.com/s/cqcf78jfbmlkf8w/Stats.png "Reloaded statistics") |

#### Preferences

| Base | Reloaded |
| ---- | -------- |
| ![preferences](https://www.dropbox.com/s/mxhh89dbas005rh/Prefs.png "Base preferences") | ![preferences2](https://www.dropbox.com/s/pdw4c4vc3gdigvw/Prefs.png "Reloaded preferences") |

#### Logging

| Base | Reloaded |
| ---- | -------- |
| ![logs](https://www.dropbox.com/s/qqbrlf5y15zewcx/Log.png "Base logs") | ![logs2](https://www.dropbox.com/s/pa99mxma91fwdg3/Logs.png "Reloaded logs") |