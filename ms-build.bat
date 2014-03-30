@echo off
echo REQUIREJS BUILD

echo ACCOUNT DIRECTORY
echo Building LOGIN
node cp-front/js/requireJs/r.js -o js/account/login-build.js

echo ADDRESS DIRECTORY
echo Building ADDRESS
node cp-front/js/requireJs/r.js -o js/address/index-build.js

echo CONFIGURATION DIRECTORY
echo Building CONFIGURATION
node cp-front/js/requireJs/r.js -o js/configuration/index-build.js

echo DEVICE DIRECTORY
echo Building DEVICE
node cp-front/js/requireJs/r.js -o js/device/index-build.js

echo EMAIL DIRECTORY
echo Building EMAIL
node cp-front/js/requireJs/r.js -o js/email/index-build.js

echo ENTERPRISE DIRECTORY
echo Building ENTERPRISE
node cp-front/js/requireJs/r.js -o js/enterprise/index-build.js

echo ENTITY DIRECTORY
echo Building ENTITY
node cp-front/js/requireJs/r.js -o js/entity/index-build.js

echo IMAGE DIRECTORY
echo Building IMAGE
node cp-front/js/requireJs/r.js -o js/image/index-build.js

echo LOG DIRECTORY
echo Building LOG
node cp-front/js/requireJs/r.js -o js/log/index-build.js

echo MEDIA DIRECTORY
echo Building MEDIA
node cp-front/js/requireJs/r.js -o js/media/index-build.js

echo MESSAGE DIRECTORY
echo Building MESSAGE
node cp-front/js/requireJs/r.js -o js/message/index-build.js

echo PHONE DIRECTORY
echo Building PHONE
node cp-front/js/requireJs/r.js -o js/phone/index-build.js

echo PRODUCT DIRECTORY
echo Building PRODUCT
node cp-front/js/requireJs/r.js -o js/product/index-build.js
node cp-front/js/requireJs/r.js -o js/product/product-registration-build.js

echo CSS BUILD
grunt buildcss