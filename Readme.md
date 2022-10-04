### Create new symfony project

Add your bitbucket consumer. Show on Workspace Settings.

```json
{
    "bitbucket-oauth": {
        "bitbucket.org": {
            "consumer-key": "your-key",
            "consumer-secret": "your-secret"
        }
    }
   
}
```

Create new empty project.
```shell
composer create-project conventus/symfony-project-skeleton ./my-project-name --repository="{\"url\": \"https://bitbucket.org/conventusdev/symfony-project-skeleton.git\", \"type\": \"vcs\"}" --remove-vcs --stability=dev
```

Then check your php-version with 'php -v' and symfony version in your makefile.dist.
Default symfony version is 5.2. If you init an other version, change this value.


makefile.dist
```makefile
export SYMFONY_VERSION ?= ^5.2
```


After define the symfony version! 
```shell
cd my-project-name
mv makefile.dist makefile
make init
```


### start/restart or stop ddev

make start
make stop


### Database parameter

Host: db  
User: db  
Password: db  
Database: db  

