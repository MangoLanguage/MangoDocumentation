# Main.mg class

The Main class is bootstrap class, which bootstraps the application.

A sample of the Main class: 

```
use Mango.Http.Response;
use Mango.Http.Request;
use Mango.Core.Throwable;

class Main extends Mango.Core.Application {
    
    /**
     * Inherited from parent class
     */
    public serve() 
    {
        try {
            super.serve();
        } catch(Throwable e) {
            this.catch(e);
        }
    }
    
    private catch(Throwable exception) 
    {
        // log an exception somehow
    }

    /**
     * Implementation of abstract method 
     */
    public run(Request request) : Response 
    {
        return new Response(200, 'Dummy page');
    }
}
```

**Mango.Core.Application:**

```
use Mango.Server.Server;
use Mango.Http.Request;
use Mango.Cli.StdIn;
use Mango.Cli.StdOut;

class Application {
   
    public serve() 
    {
        let server = new Server('127.0.0.1', env('LISTEN_PORT'));
                
        async {
            server.listen(fun(Request request) {
                return this.run(request);
            });
        }
    }
    
    public cli(StdIn in, StdOut out) 
    {
        out.line('Override this method in your app');
    }

    public abstract run(Request request) : Response;
}
```
