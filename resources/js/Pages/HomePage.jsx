import { Suspense } from 'react';
import { lazy } from 'react';
const HomePageContent = lazy(() => import('@/Components/HomePageContent.jsx'));

import LoadingScreen from '@/Components/LoadingScreen.jsx';
import { authPropTypes } from '@/PropTypes/serverSharedProps.js';

const HomePage = ({ auth }) => {
    return (
        <>
            <Suspense fallback={<LoadingScreen />}>
                <HomePageContent auth={auth} />
            </Suspense>
        </>
    );
};
HomePage.propTypes = {
    auth: authPropTypes
};
export default HomePage;
