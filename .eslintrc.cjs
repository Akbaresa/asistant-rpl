module.exports = {
    env: {
        browser: true,
        es2021: true
    },
    extends: [
        "eslint:recommended",
        "plugin:react/recommended",
        "plugin:react-hooks/recommended",
        "plugin:react/jsx-runtime"
    ],
    parserOptions: {
        ecmaVersion: "latest",
        sourceType: "module",
        ecmaFeatures: {
            jsx: true
        }
    },
    plugins: ["react", "react-hooks" ],
    rules: {
        "indent": ["error", 4],
        "quotes": ["error", 'single'],
        "semi": ['error', 'always'],
        "react/react-in-jsx-scope": "off",
        "no-undef": "off",
        "arrow-spacing": ["error", {
            before: true,
            after: true
        }],
        "prefer-arrow-callback": "error",
        "object-curly-spacing": ["error", "always"],
        "array-bracket-spacing": ["error", "always"],
        "space-before-function-paren": ["error", {
            "anonymous": "always",
            "named": "never",
            "asyncArrow": "always",
        }],
        "keyword-spacing": ["error", {
            "before": true,
            "after": true
        }],
        "arrow-parens": ["error", "always"],
        "block-scoped-var": "error"
    }
};
