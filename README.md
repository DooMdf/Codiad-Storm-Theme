Codiad Storm Theme
==================
version 1.7
Repository updated
######Created by DooM

Complete Codiad theme, based on my favorite IDE  

Icons from www.iconfinder.com

### Version 1.7 Changelog
- Minimized images size.
- Filemanager list view updated, now look even better.
- Created sprite images instead of separate images in order to minimize hits and number of loaded objects.
- Minimalistic theme.
- Plugins should work fine, little graphic bugs may occur.
- New favicon for Codiad.
- Support for Codiad pull #559 sidebars width will be auto detected.

### Preview:
<img src="http://i43.tinypic.com/54pol.jpg" border="0" alt="Image and video hosting by TinyPic">

updated file manager list view:  
<img src="http://i44.tinypic.com/124g7md.png" border="0" alt="http://i40.tinypic.com/x6jsj7.jpg">

### Install Instructions
Download this repository and extract it to Codiad theme folder.
Currently waiting for pull request, if it will be added to Codiad, all the steps below will be unnecessary as it will autodetect the width.

copy files there and when you login click on 'more' button and select this theme.
#####This Theme require little core modification:
######inside js folder:
    - sidebar.js - go to line 188 change 190 to 160.
    - system.js - go to line 91 change .outerHeight value to 47 instead of 60.
######inside components/project folder:
    - init.js - go to line 104 and line 106 change 33 to 21.
######inside config.php file
    - go to line 20 change "default" to "storm" to enable this theme: define("THEME", "storm");
    
If you will switch themes you will have to reset this changes
Or your other theme will not work properly.
I also added code into index.php file to add support for modified themes, I will release it soon.
It will require global changes.
c
### Bugs

- Vertical scroll bar disappear on workspace load, same happens with the default theme.
- When right sidebar open its covers the line number and column info.
- When resizing left sidebar the workspace wait for mouse release to fit.

all this bugs also exist in the default theme...
