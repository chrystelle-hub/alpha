const electron = require('electron');
const app = electron.app;
const BrowserWindow = electron.BrowserWindow;

let mainWindow;

function createWindow () {

  mainWindow = new BrowserWindow({width: 1800, height: 1200});

  mainWindow.loadURL(`file://C:/wamp64/www/app_stage2/electron/appli/View/index.html`);

  mainWindow.on('closed', () => {
    mainWindow = null;
  })
}

app.on('ready', createWindow);

app.on('window-all-closed', () => {
  if (process.platform !== 'darwin') {
    app.quit();
  }
});

app.on('activate', () => {
  if (mainWindow === null) {
    createWindow();
  }
});
