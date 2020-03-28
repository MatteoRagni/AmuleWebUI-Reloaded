# AmuleWebUI-Reloaded Mateterial Style

Update style of 'AmuleWebUI-Reloaded' in Material design with CSS

## Credits 

* Matteo Ragni for Reloaded Project `https://github.com/MatteoRagni/AmuleWebUI-Reloaded`
* Daneden for animate .css `https://github.com/daneden/animate.css/`

## Structure 

The structure and it's functionalities, is completely equivalent to the old `Reloaded`

## Change & Fix

```
Add CSS Animated Logo in Login page
Add CSS FadeIn on all page
Add modern style with CSS
Add Top Page  button in Search with CSS and js code
Fix css code Footer for Mobile Device
```

# Animated Login

<p align="center">
  <img width="460" height="300" src="https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/login.gif">
</p>

## Installation

To install the web interface simply clone the repo in a directory inside `/usr/share/amule/webserver` (tested on my Raspian on raspberry (Debian based distro):

Step 1: Stop `amuleweb` process:

``` bash
sudo service amule-daemon stop
```

``` bash
cd /usr/share/amule/webserver
sudo git clone https://github.com/Brax84/AmuleWebUI-Reloaded-Material
```

After, you need to edit configuration file:

``` bash
sudo nano /home/amule/.aMule/amule.conf
```
Find and edit line `Template`

```
...
[Webserver]
...
Template=AmuleWebUI-Reloaded-Material
...
```

Step 2: Reload `amuleweb` process:

``` bash
sudo service amule-daemon start (or restart command)
```

Interface is available at address `http://localhost:4711` or `NetworkDeviceIp:4711`


## Comparison 

#### Login 

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![login](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Login.png "Reloaded login") | ![login2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Login.png "Material login" ) |

#### Download/Uploads

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![transfer](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Transfer.png "Reloaded transfer") | ![transfer2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Transfer.png "Material transfer") |

#### Search

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![search](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Search.png "Reloaded Search") | ![search2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Search.png "Material search") |

#### Shared

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![shared](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Shared.png "Reloaded Shared") | ![shared2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Shared.png "Material Search") |


#### Servers

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![servers](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Server.png "Reloaded Server") | ![servers2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Servers.png "Material Server") |

#### Kad connections

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![Kad](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Kad.png "Reloaded Kad") | ![Kad2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Kad.png "Material kad") |

#### Statistics

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![statistics](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Stats.png "Reloaded statistics") | ![statistics2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Statics.png "Material statistics") |

#### Preferences

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![preferences](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Prefs.png "Reloaded preferences") | ![preferences2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Settings.png "Material preferences") |

#### Logging

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![logs](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadPic/Logs.png "Reloaded Logging") | ![logs2](https://github.com/Brax84/AmuleWebUI-Reloaded-Material/blob/master/doc-images/ReloadMateriaPic/Logs.png "Material Logging") |
