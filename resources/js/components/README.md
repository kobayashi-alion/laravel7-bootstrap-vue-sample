## はじめに
このディレクトリは、デフォルトでは存在しません。<br>
インストール作業の段階にて、サンプルのソースコードと一緒に生成されます。

## インストール
プロジェクト配下にて下記のコマンドを発行します
```
composer require laravel/ui
php artisan vue ui  # この段階で、このディレクトリが作成されます
npm install
```

## 開発
Vue.jsのコンポーネントは、コンパイルが必要です。<br>
毎回コンパイルするのは非常に面倒なのでHMR(Hot Module Replacement)モードで作業することをオススメします。<br>

下記のコマンドにて、HMRモードで作業できます。<br>
※ コマンドを実行すると、コンソールが専有されるのでVSCode上でコマンドを発行するのはやめましょう
```
php artisan serve | npm run hot
```
