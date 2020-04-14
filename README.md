# AmuleWebUI-Reloaded Mateterial Style

Update style of 'AmuleWebUI-Reloaded' in Material design with CSS

## Credits 

* Brax84 for a **full redesign** of my inital work, making it really nice ([Pull 17](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/pull/17))
* Knocks83 for fixing some README inconsistencies in links ([Pull 18](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/pull/18)) and minor fixes ([Pull 19](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/pull/19))
* atlant2011 that improved integrity checks and caching in browser ([Pull 14](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/pull/14))
* gise88 for fixing an error in main search ([Pull 13](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/pull/13))
* ThecaTTony for fixing an error in sort by files ([Pull 9](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/pull/9))
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
  <img width="460" height="300" src="https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/login.gif?raw=true">
</p>

## Installation

To install the web interface simply clone the repo in a directory inside `/usr/share/amule/webserver` (tested on my Raspberry running Raspbian):

Step 1: Stop `amule-daemon` process:

``` bash
sudo service amule-daemon stop
```

``` bash
cd /usr/share/amule/webserver
sudo git clone https://github.com/MatteoRagni/AmuleWebUI-Reloaded.git
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
Template=AmuleWebUI-Reloaded
...
```

Step 2: Start `amule-daemon` process:

``` bash
sudo service amule-daemon start (or restart command)
```

Interface is available at address `http://localhost:4711` or `NetworkDeviceIp:4711`


## Comparison 

#### Login 

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![login](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Login.png?raw=true "Reloaded login") | ![login2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Login.png?raw=true "Material login" ) |

#### Download/Uploads

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![transfer](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Transfer.png?raw=true "Reloaded transfer") | ![transfer2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Transfer.png?raw=true "Material transfer") |

#### Search

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![search](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Search.png?raw=true "Reloaded Search") | ![search2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Search.png?raw=true "Material search") |

#### Shared

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![shared](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Shared.png?raw=true "Reloaded Shared") | ![shared2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Shared.png?raw=true "Material Search") |


#### Servers

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![servers](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Server.png?raw=true "Reloaded Server") | ![servers2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Servers.png?raw=true "Material Server") |

#### Kad connections

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![Kad](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Kad.png?raw=true "Reloaded Kad") | ![Kad2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Kad.png?raw=true "Material kad") |

#### Statistics

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![statistics](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Stats.png?raw=true "Reloaded statistics") | ![statistics2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Statics.png?raw=true "Material statistics") |

#### Preferences

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![preferences](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Prefs.png?raw=true "Reloaded preferences") | ![preferences2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Settings.png?raw=true "Material preferences") |

#### Logging

| Reloaded | Reloaded Material |
| ---- | -------- |
| ![logs](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadPic/Logs.png?raw=true "Reloaded Logging") | ![logs2](https://github.com/MatteoRagni/AmuleWebUI-Reloaded/blob/master/doc-images/ReloadMateriaPic/Logs.png?raw=true "Material Logging") |
