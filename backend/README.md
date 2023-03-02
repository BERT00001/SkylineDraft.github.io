## Dev setup

#### Install Python
> we'll use [Python 3.11.2](https://www.python.org/downloads/release/python-3112/)  
   
Verify the installation was successful by running either of the ff. in the command line:  

\> `python --version`   
\> `python -V`   
\> `py -V`   
   

#### Create a virtual environment and activate (on Windows)
  
1. Go to backend directory:   
```sh
cd backend
```    
2. Install virtualenv:
```sh
pip install virtualenv
```
3. Create and activate the virtual environment by running:   
```sh
virtualenv .venv
.venv\Scripts\activate
```     

#### Install Django
> we'll use the latest [Django](https://www.djangoproject.com/) release ([v4.1.7](https://docs.djangoproject.com/en/4.1/releases/4.1.7/) as of 02/27/23)   

Install Django and other packages using `pip install` command:   
```sh
pip install Django==4.1.7
```  

You can also install Django along with the other packages in the _requirements.txt_ file by running:   
```sh
pip install -r requirements.txt
```    

#### Run migrations

```sh
python manage.py makemigrations
python manage.py migrate
```

#### Start dev server

```sh
python manage.py runserver
```