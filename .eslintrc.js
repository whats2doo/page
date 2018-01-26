module.exports = {
  parser: 'babel-eslint',
  env: {
    browser: true,
    mocha: true,
  },
  extends: ['airbnb-base'],
  plugins: ['vue'],
  rules: {
    semi: 'off',
    'no-param-reassign': ['error', { props: false }],
    'import/prefer-default-export': 'off',
    'no-unused-expressions': 'off',
  },
  parserOptions: {
    ecmaVersion: 6,
    sourceType: 'module',
    ecmaFeatures: {
      jsx: true,
    },
  },
  globals: {
    CKEDITOR: true,
    expect: true,
    localStorage: true,
    sinon: true,
  },
}
