const dist = 'dist';
const src = 'src';

const file = 't_20180820';

const config={
  root:'./',
  dist:`${dist}/${file}`,
  src:`${src}/${file}`,
  javascript:{
    from:`${src}/${file}/*.js`,
    to:`${dist}/${file}`,
    watch:`${src}/${file}/*.js`,
    pluginsFrom:`${src}/plugins/*.js`,
    pluginsTo:`${dist}/plugins`,
    exclude:`!${src}/plugins/*.js`
  },
  style:{
    from:`${src}/${file}/*.less`,
    to:`${dist}/${file}`,
    watch:`${src}/${file}/*.less`,
    exclude:``
  },
  html:{
    from:`${src}/${file}/*.html`,
    to:`${dist}/${file}`,
    watch:`${src}/${file}/*.html`,
    common:`${src}/common/*.html`,
    exclude:`${src}/common/*.html`
  },
  AUTOPREFIXER_BROWSERS:[
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
  ],
  UGLIFY_OPTION:{
    compress:{
      drop_console:true
    }
  }
};

module.exports=config;
