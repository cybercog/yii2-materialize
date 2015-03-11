Yii2 asset for Materialize
=================
Yii2 asset for Materialize css framework http://materializecss.com/

Installation
------------

Add 

```
"repositories":
            [
                {
                    "type": "vcs",
                    "url": "https://github.com/mist-webit/yii2-materialize"
                }
            ],
```

to your composer.json file and add 

```
"mist-webit/yii2-materialize": "*"
```
to the require section of your composer.json file.

Usage
-----

Open your layout views/layouts/main.php and add

```
use mistwebit\materialize\MaterializeAsset;

MaterializeAsset::register($this);
```
