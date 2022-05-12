<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Roles and Permission

Laravel roles and permission is simple creating roles to the user and give permission to the respective roles.To achieve this we need to some steps

- Add a spatie package for roles and permissions.
- Run Migrate command.
- Create a role seeder and insert it into roles table and also create permission seeder and insert it into permission table.
- Here in my example i added an admin seeder and assign role as admin and gave permission name which have all access.
- While new user register assigned the user role and give permission name.
- Added a controller middleware, to access a particular function the user should have permission.

Using this we will provide a perfect authorization but in my example the roles and permission are static added in seeder we can also make as dynamic by creating seperate page to create assign roles and permission.
## About Gates and policies

Laravel gates and policies are also used for authorization but in another way. The gates are pre installed facade using this we can also authorize an user.

 - Define a gate in authservice provider and write the condition should satisfy.
 - Use the required gate methods like allows and not allowes in controller.
 - You can also check it in blade also by can methods to access the particular work by the defined user.
 - In policies create a respective policy for athe model using artisan command and register it in Authservice provider.
 - Policy file will create under the policy folder in app directory use can add the condition in each function which pre defined in policy file like create, update,delete,view.
 - Add the can method condition in controller by sending required model to policy.
## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
