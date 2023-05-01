module.exports = {
    plugins: {
        //呼び出すプラグインを記述していく
        autoprefixer: {},
        'postcss-normalize-charset': {},
        'postcss-sort-media-queries': {},
        'css-declaration-sorter':{order:'smacss'},
        '@fullhuman/postcss-purgecss': {
            content: ['./src/**/*.html','./src/js/**/*.js'],
            //除外設定　https://purgecss.com/safelisting.html
            safelist: ['hoge']
        },
    },
}