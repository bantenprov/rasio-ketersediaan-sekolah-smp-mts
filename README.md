## rasio-ketersediaan-sekolah-smp-mts

[![Join the chat at https://gitter.im/rasio-ketersediaan-sekolah-smp-mts/Lobby](https://badges.gitter.im/rasio-ketersediaan-sekolah-smp-mts/Lobby.svg)](https://gitter.im/rasio-ketersediaan-sekolah-smp-mts/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rasio-ketersediaan-sekolah-smp-mts/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-ketersediaan-sekolah-smp-mts/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rasio-ketersediaan-sekolah-smp-mts/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-ketersediaan-sekolah-smp-mts/build-status/master)

Rasio Ketersediaan Sekolah (RKS) SMP / MTs

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/rasio-ketersediaan-sekolah-smp-mts:dev-master
```
- Latest release:

```bash
$ composer require bantenprov/rasio-ketersediaan-sekolah-smp-mts:v0.1.0
```

## download via github
~~~
bash
$ git clone https://github.com/bantenprov/rasio-ketersediaan-sekolah-smp-mts.git
~~~


#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\RKSekolahSMPMTS\RKSekolahSMPMTSServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rk-sekolah-smp-mts-assets
$ php artisan vendor:publish --tag=rk-sekolah-smp-mts-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/rk-sekolah-smp-mts',
    components: {
      main: resolve => require(['./components/views/bantenprov/rk-sekolah-smp-mts/DashboardRKSekolahSMPMTS.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Rasio Ketersediaan Sekolah SMP/Mts"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/rk-sekolah-smp-mts',
      components: {
        main: resolve => require(['./components/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Rasio Ketersediaan Sekolah SMP/Mts"
      }
    }
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Rasio Keterediaan Sekolah SMP/MTs',
          link: '/dashboard/rk-sekolah-smp-mts',
          icon: 'fa fa-angle-double-right'
        }
  ]
},

```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import RKSekolahSMPMTS from './components/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTS.chart.vue';
Vue.component('echarts-rk-sekolah-smp-mts', RKSekolahSMPMTS);

import RKSekolahSMPMTSKota from './components/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSKota.chart.vue';
Vue.component('echarts-rk-sekolah-smp-mts-kota', RKSekolahSMPMTSKota);

import RKSekolahSMPMTSTahun from './components/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSTahun.chart.vue';
Vue.component('echarts-rk-sekolah-smp-mts-tahun', RKSekolahSMPMTSTahun);

import RKSekolahSMPMTSAdminShow from './components/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSAdmin.show.vue';
Vue.component('admin-view-rk-sekolah-smp-mts-tahun', RKSekolahSMPMTSAdminShow);

//== Echarts Angka Partisipasi Kasar

import RKSekolahSMPMTSBar01 from './components/views/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSBar01.vue';
Vue.component('rk-sekolah-smp-mts-bar-01', RKSekolahSMPMTSBar01);

import RKSekolahSMPMTSBar02 from './components/views/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSBar02.vue';
Vue.component('rk-sekolah-smp-mts-bar-02', RKSekolahSMPMTSBar02);

//== mini bar charts
import RKSekolahSMPMTSBar03 from './components/views/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSBar03.vue';
Vue.component('rk-sekolah-smp-mts-bar-03', RKSekolahSMPMTSBar03);

import RKSekolahSMPMTSPie01 from './components/views/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSPie01.vue';
Vue.component('rk-sekolah-smp-mts-pie-01', RKSekolahSMPMTSPie01);

import RKSekolahSMPMTSPie02 from './components/views/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSPie02.vue';
Vue.component('rk-sekolah-smp-mts-pie-02', RKSekolahSMPMTSPie02);

//== mini pie charts
import RKSekolahSMPMTSPie03 from './components/views/bantenprov/rk-sekolah-smp-mts/RKSekolahSMPMTSPie03.vue';
Vue.component('rk-sekolah-smp-mts-pie-03', RKSekolahSMPMTSPie03);
```
