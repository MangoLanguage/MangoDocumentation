# The notion of project

Each project is organized directory on drive which contains project config (.mango-project) and project files itself. 
Dependency manager places vendor/ directory with 3rd party packages. Adding web/ directory is allowed, it wont be parsed
and can contain any static files. Along with web/ folder, resources/ folder could be placed in order to store sources of
sass, less, original images, js, etc. In additional, runtime/ folder takes place and could contains any files like cache, etc.

The resulting project root looks like:

| Path                   | Description                                                                                 |
| ---------------------- | ------------------------------------------------------------------------------------------- |
| .mango-project         | Should be placed in root dir and contains a list of configuring directives like limits, etc |
| src/                   | Contains application sources (classes, interfaces, etc)                                     |
| vendor/                | Contains 3rd party packages, loaded by dependency manager                                   |
| web/                   | Static files storage                                                                        |
| resources/             | CSS, JS resources                                                                           |
| runtime/               | Folder with runtime assets like cache, etc                                                  |
| logs/                  | The directory with file logs for mango-application                                          |
| Main.mg                | Main class which has method run(Request request) which bootstraps the application           |