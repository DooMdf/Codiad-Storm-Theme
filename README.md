Codiad Storm Theme
==================

Storm theme | version 1

Created by DooM


Complete Codaid theme, based on my favorite IDE
New favicon also availble

Icons from www.iconfinder.com

### Install instructions ###

1. Copy files into the same directories.
2. NOTE: This theme reqiures modification of Codaid system files
	 If you will want to change theme you will have to reset this changes
	 Or your other theme will not work properly. 

   inside js folder:
	- sidebar.js - go to line 188 change 190 to 160.
	- system.js - go to line 91 change .outerHeight value to 47 instead of 60.

   inside components/project folder:
	- init.js - go to line 104 and line 106 change 33 to 21.

All this changes is required.

3. in Codaid root folder, open config.php and go to line 20 change "default" to "storm" to enable this theme
   there should be another way to install themes but I don't know it :)

### Bugs ###

- Vertical scroll bar dissapear on workspace load, same happens with the default theme.
- When right sidebar open its covers the line number and column info.
- When resizing left sidebar the workspace wait for mouse release to fit.

all this bugs exist in default theme also...

Preview:

full:

<img src="http://i43.tinypic.com/54pol.jpg" border="0" alt="Image and video hosting by TinyPic"></a>

file manager:

<img src="http://i40.tinypic.com/x6jsj7.jpg" border="0" alt="Image and video hosting by TinyPic"></a>
