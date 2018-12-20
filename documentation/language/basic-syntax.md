# Basic syntax

The syntax of the language is similar to C, C++ which is also inherited in PHP, JS, Java and many other languages.
This decision was made just because its is considered as a good, popular and comfortable to work with standard nowadays.

Typical mango file looks like this:
```
use Foo.Bar.BaseClass;
use Mango.Object;

const SOME = 1;

class TestClass extends BaseClass
{       
    constructor(private string value = 'test') 
    {}
    
    get value;
    set value;
    
    /**
     * Some method
     */
    public fun some(string param, string otherParam) : void 
    {
        this.value = this.value.toUpperCase();      
        this.dummyMethod();    
    }
         
    public fun dummyMethod() : string 
    {
        return now().toString();
    }
        
    public fun dummyMethod(string param) : Object? 
    {
        return null;
    }
}
``` 

## Step by step, again:

The first important thing is that we cannot use inline HTML code like it was in php. That's why we dont have
such constructions as opening and closing tags for scripts. This is considered to be a bad practice and restricted 
also because the only way of booting the app is the execution flow which has its features and 
reasons of usage and helps to optimize the application code and execute it in the best way.

```
use Foo.Bar.BaseClass;
use Mango.Object;
```

We can see `use` construction which is placed in the very beginning of file. 
This construction simply imports class from other namespace. We can see that we do not 
specify namespace. Its all because namespace is also the path to this class within `src/` folder.

```
const SOME = 1;
```
Then, `const` variable is a variable which can be declared within the file and its fully private. 
It can be used anywhere in the class, that we describing in this file, but nowhere outside of it.
Constants are always calculated once within the lifetime of mango.  

```
class TestClass extends BaseClass
{
    constructor(private string value = 'test') {}   
```
The classes implementation is quite similar to what we can see in Java or PHP but with some difference:
in constructor, we can declare property of class by simply add access modifier. This avoids forwarding 
a variable into the class property through constructor.

```
get value; 
set value;
```
in class declares property as acceptable. It's a syntax sugar which can be 
replaced with the following code:

```
public fun getValue() 
{
    return this.value;
}

public fun setValue(value)
{
    this.value = value;
}
```

```
/**
 * Some method
 */
```
Comments are // and /* ... */, as usually in C-like languages.

```
public fun some(string param, string otherParam) : void 
{
    this.value = this.value.toUpperCase();      
    this.dummyMethod();    
}
```
Method declaration requires access modifier and keyword `fun`. Also, it supports setting return 
value type and specifying arguments types. 

```
public fun dummyMethod() : string 
{
    return now().toString();
}
    
public fun dummyMethod(string param) : Object? 
{
    return null;
}
```
Methods allows multiple signatures which means that there could 
be 2 same-named methods with different arguments and different return type.
`?` character allows to indicate type as non-required.