# Control structures

### if
`if` is used for conditions.
Sample of usage:

```
if (foo.isBar()) {
    // 1
} else if(foo.isBarSibling()) {
    // 2
} else {
    //
}
```

### while, do-while
```
while (resource.hasLeft()) {
    //
}

do {
    //
} while (!resource.empty());
```

### for
```
for (let i = 0; i <= 10; i++) {
    //
}
```
Its also can be used in order to walk across the walking structure:
```
for (value in resource) {
    //
}

for ((value, key) in resource) {
    //
} 
```


### when
Replaces `switch` with more powerful conditions. Allows to rename checking condition.
Expression can be used, true result leads to body execution. In case of scalar value passed through,
structure compares origin value to the scalar value.
```
when (value as v) {
    "test" -> {
        // action
    },
    v matches /[\w\-]+/ -> {
        // do action 
    },
    v.length > 10 -> {
        // another
    },
    else -> {
        // no matches
    }
}
```