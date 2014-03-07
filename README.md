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

Interface is available at address [](http://localhost:4711)

## Comparison 

Here some screenshots for comparison purposes:

#### Login 

| Base                                                 | Reloaded                                                  |
| ---------------------------------------------------- | --------------------------------------------------------- |
| ![login](https://copy.com/tLcRsW7lbVLe "Base login") | ![login2](https://copy.com/wLep1LuJYmEO "Reloaded login") |

#### Download/Uploads

| Base                                                       | Reloaded                                                        |
| ---------------------------------------------------------- | --------------------------------------------------------------- |
| ![transfer](https://copy.com/N9DjJZSemeEV "Base transfer") | ![transfer2](https://copy.com/JBfdop4LKsVx "Reloaded transfer") |

#### Search

| Base                                                   | Reloaded                                                    |
| ------------------------------------------------------ | ----------------------------------------------------------- |
| ![search](https://copy.com/fFkBMkwivKke "Base search") | ![search2](https://copy.com/1IOzRCBN0qrq "Reloaded search") |

#### Shared

| Base                                                   | Reloaded                                                    |
| ------------------------------------------------------ | ----------------------------------------------------------- |
| ![shared](https://copy.com/Kd2AFU296dCe "Base shared") | ![shared2](https://copy.com/eH2cxyd21Pu0 "Reloaded shared") |


#### Servers

| Base                                                     | Reloaded                                                      |
| -------------------------------------------------------- | ------------------------------------------------------------- |
| ![servers](https://copy.com/x6hjf2FnIFWX "Base servers") | ![servers2](https://copy.com/1IOzRCBN0qrq "Reloaded servers") |

#### Kad connections

| Base                                             | Reloaded                                              |
| ------------------------------------------------ | ----------------------------------------------------- |
| ![Kad](https://copy.com/eTYvnnoQYKJK "Base Kad") | ![Kad2](https://copy.com/VdxFbLIRj0KG "Reloaded Kad") |

#### Statistics

| Base                                                           | Reloaded                                                            |
| -------------------------------------------------------------- | ------------------------------------------------------------------- |
| ![statistics](https://copy.com/elXbSg9urHx7 "Base statistics") | ![statistics2](https://copy.com/wXxwnn3SXts8 "Reloaded statistics") |

#### Preferences

| Base                                                             | Reloaded                                                              |
| ---------------------------------------------------------------- | --------------------------------------------------------------------- |
| ![preferences](https://copy.com/KreIScW78Wgy "Base preferences") | ![preferences2](https://copy.com/fACjjl4skRTa "Reloaded preferences") |

#### Logging

| Base                                               | Reloaded                                                |
| -------------------------------------------------- | ------------------------------------------------------- |
| ![logs](https://copy.com/amtqGBYYrhvy "Base logs") | ![logs2](https://copy.com/zOmJs3DiSCYy "Reloaded logs") |