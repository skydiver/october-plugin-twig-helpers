# isActive

Check if current page is equal to a page filename.
Returns an `active` css class.
Useful for menus and highlight active item.


## Usage:

If current page is `home.htm`, the result will be:
```
|{{ isActive(this.page, 'home') }}|
# Result: ` class="active"`
```

```
|{{ isActive(this.page, 'home', false) }}|
# Result: `active`
```

```
|{{ isActive(this.page, 'home', false) }}|
# Result: `active`
```

```
{{ isActive(this.page, 'home', false, 'my-active-css-class') }}
# Result: `my-active-css-class`
```

```
{{ isActive(this.page, 'home', true, 'my-active-css-class') }}
# Result: ` class="my-active-css-class"`
```

## Full menu usage:

```
<div class="collapse navbar-collapse navbar-right" id="navbar-collapse">
    <ul class="nav navbar-nav">
        <li{{ isActive(this.page, 'home')  }}><a href="{{ 'home'|page  }}">Home</a></li>
        <li{{ isActive(this.page, 'about') }}><a href="{{ 'about'|page }}">About</a></li>
        <li{{ isActive(this.page, 'shop')  }}><a href="{{ 'shop'|page  }}">Shop</a></li>
    </ul>
</div>
```