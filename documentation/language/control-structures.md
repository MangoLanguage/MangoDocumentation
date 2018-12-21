# Control structures

### if
`if` is used for conditions.
Sample of usage:

```
if (foo.isBar()) {
    // 1
} else if (foo.isBarSibling()) {
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
Its also can be used in order to walk across the walking dereferenced structure:
```
for (resource => value: int) {
    //
}

for (someArray => (value: int, index: int)) {
    //
} 
```


### when
Replaces `switch` with more powerful conditions. This structure allows dereferencing by using `=>` structure.
Expression can be used, true result leads to body execution. In case of scalar value passed through,
structure compares origin value to the scalar value.
```
when (this.someLongValirableName.someParam => v) {
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

### dereference ( => )
This structure can be used in particular structures
1) for
2) when
3) async

In case of `for`, only `Array` and `ArrayMapped` could be dereferenced.
In case of `when` and `async`, it just copies (only scalar, references arrays and objects) variable with a new name. 
 