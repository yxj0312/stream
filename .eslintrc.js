module.exports = {
     extends: [
         // add more generic rulesets here, such as:
         'eslint:recommended',
         'plugin:vue/essential'
     ],
    rules: {
        // override/add rules settings here, such as:
        'vue/no-unused-vars': 'error',
        'no-console': 'warn'
    },
    globals: {
        "axios": false,
        "flash": false,
        "Vue": false,
        "require":false
    }
};