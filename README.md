# Laravel multi-domain and multi-tenant app

This is project used for my talk at LaraconEU Madrid 2019. Video coming soon.

The projects allows users to build "eventlist" websites.

There are 3 main parts:

* A marketing website
* An API
* Public website per tenant

#### Valet config

```bash
$ valet links
```

| Site            | URL                         | Path                                             |
|-----------------| -----------------------------| --------------------------------------------------| 
| api.eventlist   | http://api.eventlist.test   | /path/to/Laravel/project |
| eventlist       | http://eventlist.test       | /path/to/Laravel/project |
| madrid-concerts | http://madrid-concerts.test | /path/to/Laravel/project |
| parisrockshows  | http://parisrockshows.test  | /path/to/Laravel/project |



## Next steps:

* Where to put `Route::auth()`
* More details how tenancy and (stateless) API
* Handle tenancy in the dashboard (it's different than the public user website)
