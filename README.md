Step 1. Set up the Development Environment
Verify that you are running at least node 6.9.x and npm 3.x.x by running node -v and npm -v in a terminal/console window. Older versions produce errors, but newer versions are fine.

You need to set up your development environment before you can do anything.
npm install -g @angular/cli
Then install the Angular CLI globally.
Step 2. Create a new project
Generate a new project and skeleton application by running the following commands:
ng new faq
Step 3: Serve the application
Go to the project directory and launch the server.
cd faq

Application Folder structure after installation - 
ede/
    app.e2e-spec.ts
app.po.ts
tsconfig.e2e.json
node_modules/
    All required libraries files.
src/
app/
app.component.css
app.component.html
app.component.spec.ts
app.component.ts
app.module.ts
assets/
environments/
environment.prod.ts
Environment.ts
favicon.ico
index.html
main.ts
polyfills.ts
styles.css
test.ts
tsconfig.app.json
tsconfig.spec.json
karma.conf.js
package.json
protractor.conf.js
README.md
tsconfig.json
tslint.json

ng serve --open
	Application Screen -


The ng serve command launches the server, watches your files, and rebuilds the app as you make changes to those files. Using the --open (or just -o) option will automatically open your browser on http://localhost:4200/.


