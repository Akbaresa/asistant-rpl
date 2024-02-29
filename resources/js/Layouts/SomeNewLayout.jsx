import PropTypes from 'prop-types';

export const SomeNewLayout = ({ children }) => {

    return (
        <>
            <main>
                { children }
            </main>
        </>
    );
};

SomeNewLayout.propTypes = {
    children: PropTypes.node
};
