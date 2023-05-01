# vite-markup-format
viteでビルドするマークアップフォーマット

## ビルド  
`npm run dev`  
`npm run build`

## node npmバージョン
node 18.6.0  

## インストールパッケージ  
postcss  
autoprefixer  
css-declaration-sorter  
js-beautify  
postcss-normalize-charset  
postcss-sort-media-queries  
sass  

削除予定：vite-plugin-imagemin

## 各ディレクトリの説明  
src：作業用ディレクトリ  
　- components：共通部分のパーツ格納  
　- js：jsのファイル格納  
　- public：画像、フォントなどの格納  
　- scss：scssファイルの格納  
dist：書き出し用のディレクトリ  


## 注意点  
public内のjsは空であればエラーになりますが、ビルドは完了します。  
public内のjsは追加で読み込みしたjsなどを格納してください。  
reset.cssは、normalize.cssを使用  
scssは、foundationのディレクトリに共通部分のファイルを持たせ、_init.scssに統合して、style.scssで_init.scssを読み込み。