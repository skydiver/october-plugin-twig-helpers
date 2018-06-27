# pr & prd

Execute PHP `print_r` function inside HTML `<pre>` tags.
Useful for debug arrays or objects.
Lighter than using `dd`.


## Usage:
```
{{ ['apples', 'lemons', 'oranges']|pr }}
```
Result:
```
<pre>Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
)
</pre>
```

* The difference between pr and prd is that a `die` function is called at the end, finishing script execution.