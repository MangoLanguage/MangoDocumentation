# Async

Async is build-in construction which can be used as JS's promises. This means that it creates
an isolated context which runs asynchronously. This is very useful in CLI scenarios development.
This construction similar to lambda function - it has arguments list, but with the major difference:
once its processed by the interpreter, it starts execute it body without calling it as a function 
And, the result of this function is always Mango.Core.Async instance. Also, arguments are passed
to this function from the parent context by copying (for scalars) with an ability to rename them for local usage. 

```
let asyncs: Array<Mango.Core.Async> = [];

for (let i = 0; i <= 10; i++) {
    asyncs[] = async(i, this.someVar => var) {
        this.processThread(        
    };
}

await asyncs;
``` 

Here we can see `async` and `await`. The first one declares async process which creates new thread.
Await is a construction, which just waits async construction call to be finished. It can accept both:
`Mango.Core.Async` and `Array<Mango.Core.Async>`.