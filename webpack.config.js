module.exports = [
  {
    entry: {
      "ui3kitify-node-hero": "./app/components/ui3kitify-node-hero.vue",
      "widget-theme": "./app/components/widget-theme.vue",
      "icon-node": "./app/components/icon-node.vue",
      "theme-configure": "./app/views/theme-configure.js",
    },
    output: {
      filename: "./app/bundle/[name].js"
    },
    module: {
      loaders: [
          { test: /\.vue$/, loader: "vue" }
      ]
    }
  }
];
