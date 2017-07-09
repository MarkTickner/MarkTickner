# Mark Tickner

My personal website, built using Wordpress with a custom theme.

Deployed on the Openshift platform.

## Running Locally in MAMP

Set the database environment variables:

    APACHE_VARS='/Applications/MAMP/Library/bin/envvars'
    echo 'export OPENSHIFT_APP_NAME=mt' >> $APACHE_VARS
    echo 'export OPENSHIFT_MYSQL_DB_USERNAME=root' >> $APACHE_VARS
    echo 'export OPENSHIFT_MYSQL_DB_PASSWORD=root' >> $APACHE_VARS
    echo 'export OPENSHIFT_MYSQL_DB_HOST=localhost' >> $APACHE_VARS
    echo 'export OPENSHIFT_MYSQL_DB_PORT=8889' >> $APACHE_VARS
    echo 'export OPENSHIFT_DATA_DIR=~/Workspace/MarkTickner/' >> $APACHE_VARS