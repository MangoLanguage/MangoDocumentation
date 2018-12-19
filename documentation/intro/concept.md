# Basic concept

The language development has started way ago and was dedicated mainly to education purposes. 
Since that, many important things which leads to current language concept were weighted and deliberated.

*Here is the list which explains and shows the basic concept and main features of the language:*

- Domain of usage is only web-development which affects on syntax, execution flow, components and all other sides of the language.
This also leads to simple rule: "develop something which works good for doing only one job is easier and better than doing lots of jobs but tricky"

- Easy to use, minimalistic and flexible syntax increases feedback from developer to language.
That's why beautiful for end user is more important than trickiness in implementation.

- Large variety of usage: language should support quick development of simple applications (tiny websites) and to be
flexible and strict enough for using it in enterprise applications.

- Strict but non-static typing is an optimal way which prevents many issues while developing an app.
The same time, forced typecast should be flexible, predictable and simple to do.

- According to points 1 and 3, the language components covers all major cases and situations in web development.
That doesnt means that it has a solution for all the possible cases of application, but provides simple structures and services which could be
used, extended or encapsulated in your application or framework.<br>

- The language inherits and extends the level of OOP support in Java with some influence of other languages as PHP, TypeScript and C#.

- The language has strict, non-static typing and predictable typecast which prevents usage of such weird compares 
like js's [] == 0 or php's null == 0.

- Language disables direct html integration like in PHP and do not recommend to use html inline in your code. 
Its recommended to use template engines for that purposes.    

- Execution flow requires particular class or its child instance to be returned in any case (success/error) of user's request. 

- Additionally, the language provides a variety of contracts (interfaces) within its contracts package, which allows to modify
  syntax behavior or standardise child packages.
  
- Scalar types in Mango are pseudo-objects, which means that you are allowed to do like that: 
```
let str = 'some random string';

str.toUpperCase().split(' '); // [SOME, RANDOM, STRING] 
```