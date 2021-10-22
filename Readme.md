Meet Signalwire
================


Meet Signalwire is a new embeded way to have a video conference.  Almost all of the CPU power needed for this is offloaded to the cloud so you can even run Meet Signalwire on a Raspberry Pi!


![meet_signalwire2](https://user-images.githubusercontent.com/13131198/138473270-a9056e0c-4c65-42dc-b519-85da2f3a8bff.png)


Install
========

This app is basic and for demonastration purposes.

```
On your server
cd /usr/src
git clone https://github.com/Len-PGH/meet-signalwire.git
Copy or move the directory 'meet_signalwire' into your main FusionPBX directory
cp -R /usr/src/meet-signalwire/app/meet_signalwire/ /var/www/fusionpbx/app/
chown -R www-data:www-data /var/www/fusionpbx/app/meet_signalwire

Log into your FusionPBX install.
Advanced -> Upgrade
Menu Defaults and Permission Defaults.
Log out and back in
```

Signalwire Settings
====================

* Login to https://signalwire.com
* Left side menu click `Video`
* Create a new room with the desired options
* Click `Embed Video Room`
* Copy the `vrg_7d952cc131bdfe93f28dee8774974321` (You'll need this later)

You have 2 options when you embed. Participant and Moderator. Currently the difference is moderator can record the video session to the cloud.

`note:` you only need the vrg_7d952cc131bdfe93f28dee8774974321


Default Settings
=================

Settings are quick and easy to set.
* Login to your fusionpbx server gui > `Advanced` > `Default settings`.

![meet_signalwire5](https://user-images.githubusercontent.com/13131198/138473264-89d19b02-af41-4f44-9746-3afaaf319e1c.png)

* Find and set the `meet_signalwire_participant_token`
* The token should start with `vrm_`
* Logout then login.

![meet_signalwire6](https://user-images.githubusercontent.com/13131198/138473263-cf79da09-7fa7-4524-a91c-f47684a494f2.png)

![meet_signalwire1](https://user-images.githubusercontent.com/13131198/138473272-c66f44db-dc16-4ea7-b42e-e078a5d520ab.png)
![meet_signalwire3](https://user-images.githubusercontent.com/13131198/138473267-eb7a0110-b29a-47b2-b376-31a9fc7ef3e3.png)


![meet_signalwire](https://user-images.githubusercontent.com/13131198/138473273-19d0bd43-827d-4d2c-b936-cac5525078a0.png)

Final Thoughts
==================

While the app is fully functional it is recomended to test this on a dev instance like you should any new features added to your installation.  More work is needed to set moderator and participant usage. Review meet_signalwire.php for more details.


