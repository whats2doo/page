module.exports = {
  env: {
    browser: true,
    jquery: true,
    mocha: true,
  },
  extends: ['airbnb-base', 'plugin:vue/essential'],
  rules: {
    semi: 'off',
    'no-param-reassign': ['error', { props: false }],
    'import/prefer-default-export': 'off',
    'padding-line-between-statements': [
      'error',
      { blankLine: 'always', prev: ['const', 'let', 'var'], next: '*' },
      { blankLine: 'any', prev: ['const', 'let', 'var'], next: ['const', 'let', 'var'] },
      { blankLine: 'always', prev: '*', next: 'return' },
    ],
  },
  parserOptions: {
    parser: 'babel-eslint',
    ecmaVersion: 6,
    sourceType: 'module',
    ecmaFeatures: {
      jsx: true
    }
  },
}
