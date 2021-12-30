# Local #

Plugin that helps to generate an xml-file to import into activity feedback to support first and second choise feedback.

![erstzweitwahl](https://user-images.githubusercontent.com/31856043/144657346-a58d6fd1-b3cf-4499-9a60-bf1080575483.gif)

![image](https://user-images.githubusercontent.com/31856043/144513664-fed4377f-1517-44a4-a020-16094002a874.png)

## Changelog ##

[[v2.0.0]]

- 12.12.2021 to support moodle styleguide use code checker to find codebeautyfing issues
- 20.12.2021 add privacy provider implementation to inform that no private date is stored
- 29.12.2021 transfer code from plugintype report to local
- 30.12.2021 settings-problem solved

[[v1.0.5]]
unknown

[[v1.0.4]]

- 03.12.2021 codebeautyfing

[[v1.0.3]]

- 03.12.2021 check that length of options is less than maxoptions
- 03.12.2021 some layoutchanges
- 03.12.2021 optimize implementation of reseting input
- 03.12.2021 added missing languagestrings


[[v1.0.2]]

- 02.12.2021 use dataurl to be able to download xml-file
- 02.12.2021 max length of option configurable
- 02.12.2021 set capability für role editingteacher instead of teacher
- 02.12.2021 check, if user has capability to view report also by checking the capapility
- 02.12.2021 do not prevent capability for student
- 02.12.2021 added missing languagestring feedbackchoicegenerator:view


[[v1.0.1]] beta

[[v1.0.0]] initial


## hint to evaluate the choices with calc-program ##
=WENN(D2<>"";D2;WENN(E2<>"";E2;WENN(F2<>"";F2;WENN(G2<>"";G2;"2.Wahl ist leer"))))


## Installing via uploaded ZIP file ##

1. Log in to your Moodle site as an admin and go to _Site administration >
   Plugins > Install plugins_.
2. Upload the ZIP file with the plugin code. You should only be prompted to add
   extra details if your plugin type is not automatically detected.
3. Check the plugin validation report and finish the installation.

## Installing manually ##

The plugin can be also installed by putting the contents of this directory to

    {your/moodle/dirroot}/local/feedbackchoicegenerator

Afterwards, log in to your Moodle site as an admin and go to _Site administration >
Notifications_ to complete the installation.

Alternatively, you can run

    $ php admin/cli/upgrade.php

to complete the installation from the command line.

## License ##



This program is free software: you can redistribute it and/or modify it under
the terms of the GNU General Public License as published by the Free Software
Foundation, either version 3 of the License, or (at your option) any later
version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY
WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with
this program.  If not, see <https://www.gnu.org/licenses/>.
