cordova.define('cordova/plugin_list', function(require, exports, module) {
    module.exports = [
        {
            "file": "plugins/esNativeCore.js",
            "id": "com.myBanana.kuozhi.v3.plugin.MenuClickPlugin",
            "merges": [
                "window.esNativeCore"
            ]
        }
    ]
});