export const mathPlus = (a, b) => {
    if (typeof a === 'number' && typeof b === 'number') {
        return a + b;
    }
    console.error('Not A Number bruh..');
    return 0;
};
