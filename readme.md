# About

This project is to create a Vue.js based single page application, which is built for __anonymous form sign up__, __payment__, __email__, __admin panel__, __download__ and basic __login__ and __register__.
  
# Installation

1. Create __.env__  

   * Copy from the __.env.sample__ 
   
   * Modify the database config and stripe information.

2. Install packages:
    ```
    composer install
    ```
    and dependencies:
    ```
    npm install
    ```
    Sometimes, please do delete `node_modules`, `vendor`, 'package-lock.json' and `composer.lock` first,
    
    and then execute the above two commands. 

3. Create API_KEY by running if there isn't a key:
    ```
    php artisan key:generate
    ```
    
4.  Migrate the database:
    ```
    php artisan migrate
    ```
    
5. Seeding to get dummy data:
    ```
    php artisan db:seed
    ```    
        
6. Queue, for sending email
    
    1. Remember to change the `QUEUE_DRIVE` setting in **.env** file
    ```
    QUEUE_DRIVER=database
    ```
    
    2. Run `queue listen` or `queue work`
    ```
    php artisan work
    php artisan work --tries=4 // with max attempts of four 
    ```
    
# Virtual Environment

- If has [valet](https://laravel.com/docs/5.5/valet) installed,
  then use it is recommended to use valet to run in __dev__ mode.

- Alternatively, use php local server

  ```
  php artisan serve
  ```
  
  and run in [localhost](http://127.0.0.1:800)  
  
# Selected APIs

  ### 1. Sign up and pay with Stripe
  
  - __Payment and Sign up__ are integrate altogether with custom vue-strpe-elment.js
  
  ### 2. Email Service
  
  - __Order Confirmation__: When use purchase or pay for something, an email will be sent from server.
  
  - __Account Registration Confirmation__: Users are invited by existing users and a confirmation email will sent to the new user. By clicking the link in the email, users will be able to set their password and login the the admin system. 
  
# Packages Version

[Laravel](https://laravel.com/docs/5.5) version is _5.5_

[Vue](https://vuejs.org/v2/guide/) version is _2.5.*_

[Vuex](https://vuex.vuejs.org/en/intro.html) version is _3.0.*_

[Stripe](https://stripe.com.au) version is *5.7*

# Screenshots

### Summit poster

![screen shot 2017-12-06 at 5 02 26 pm](https://user-images.githubusercontent.com/9074571/33647172-a69123a2-daa7-11e7-87df-8f2fd808665c.png)

### Summit Register and Pay

![](https://user-images.githubusercontent.com/9074571/33864983-9d786050-df43-11e7-904c-36dfaff3c196.png)

### Processing payment

![](https://user-images.githubusercontent.com/9074571/33714870-b2b87ea2-dba4-11e7-89ae-ad159a16e178.png)

### Payment success

![](https://user-images.githubusercontent.com/9074571/33865145-7d1ded42-df44-11e7-91da-76207a539c7e.png)

### Admin Login

![screen shot 2017-12-06 at 5 03 24 pm](https://user-images.githubusercontent.com/9074571/33865057-100e2eb0-df44-11e7-8b10-2e7233a5d480.png)

### Admin Panel

![screen shot 2017-12-06 at 5 03 38 pm](https://user-images.githubusercontent.com/9074571/33857561-5161f2bc-df20-11e7-95b0-feb3fc4b37ed.png)
