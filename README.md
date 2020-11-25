# lolight for Flarum (Syntax Alternative)
A Flarum extension which provides an alternative to the built-in syntax/code highlighting style. This allows you to use `[syntax][/syntax]` which will then use the lolight JavaScript from [Lars Jung](https://github.com/lrsjng) to make your code beautiful in a minimal way. The JavaScript used to do this is less than 3kb. Visit https://larsjung.de/lolight/ for more information.

If you want to tweak the style, here's the CSS code you may use (add to Flarum's custom CSS in the admin):

~~~
.ll-nam { /* words */
    color: #2196f3;
}
.ll-num { /* numbers */
    color: #ec407a;
}
.ll-str { /* strings */
    color: #43a047;
}
.ll-rex { /* regular expressions */
    color: #ef6c00;
}
.ll-pct { /* operators, punctation */
    color: #666;
}
.ll-key { /* keywords */
    color: #555;
    font-weight: bold;
}
.ll-com { /* comments */
    color: #aaa;
    font-style: italic;
}
~~~

## Links
- [**Github**](https://github.com/zerosonesfun/lolight)
- [**Me**](https://www.wilcosky.com)

