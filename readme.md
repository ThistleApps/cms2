# Quantum - A quick start application using the Quarx CMS powered by Laravel

<p align="center">
    <a href="https://travis-ci.org/yab/quantum"><img src="https://travis-ci.org/yab/quantum.svg" alt="Build Status"></a>
    <a href="https://packagist.org/packages/yab/quantum"><img src="https://poser.pugx.org/yab/quantum/license.svg" alt="License"></a>
</p>

## About Quantum

Quantum is a base install of the Quarx CMS on a fresh Laravel instance. It's a little more finely tuned for rapid development of sites in an incredibly fullfilling way. Rather than force developers to do setups and prep work, all you have to do is run one command to start your project and you'll begin with some of the following!

- An Admin UI
- Several modules: Blog, Pages, Menus, Events, Images, Files, FAQs, Widgets etc
- User Registration, Settings, Roles
- An Admin UI
- User management and shadowing
- A powerful CRUD builder for the Admin UI
- Built in visitor anaylytics
- Theme generator
- And more...

## Setup

There are very few steps involved in starting your new Quarx app when using Quantum. Simply run the following commands:

```
composer create-project yab/quantum {SiteName}
```

Then move into the new app directory, and make sure your database is set up and if using Homestead you've ssh'd into it.

```
artisan migrate --seed
artisan storage:link
```

You should now have a fully operational Quarx instance. Between the Laravel docs and the Quarx docs you will be able to have a website up and running within a couple hours of theme customizing. Happy Coding!

## Learning Quarx

Quarx is relatively simple in that the package handles most of its own elements you can override much of it though and there is thorough documentation available [here](http://docs.quarxcms.com)

## License

Quantum is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

### Bug Reporting and Feature Requests

Please add as many details as possible regarding submission of issues and feature requests

### Disclaimer

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

