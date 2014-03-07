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
| ![login]( "Base login") | ![login2]( "Reloaded login") |

#### Download/Uploads

| Base | Reloaded |
| ---- | -------- |
| ![transfer]( "Base transfer") | ![transfer2]( "Reloaded transfer") |

#### Search

| Base | Reloaded |
| ---- | -------- |
| ![search]( "Base search") | ![search2]( "Reloaded search") |

#### Shared

| Base | Reloaded |
| ---- | -------- |
| ![shared]( "Base shared") | ![shared2]( "Reloaded shared") |


#### Servers

| Base | Reloaded |
| ---- | -------- |
| ![servers]( "Base servers") | ![servers2]( "Reloaded servers") |

#### Kad connections

| Base | Reloaded |
| ---- | -------- |
| ![Kad]( "Base Kad") | ![Kad2]( "Reloaded Kad") |

#### Statistics

| Base | Reloaded |
| ---- | -------- |
| ![statistics]( "Base statistics") | ![statistics2]( "Reloaded statistics") |

#### Preferences

| Base | Reloaded |
| ---- | -------- |
| ![preferences]( "Base preferences") | ![preferences2]( "Reloaded preferences") |

#### Logging

| Base | Reloaded |
| ---- | -------- |
| ![logs](h "Base logs") | ![logs2]( "Reloaded logs") |