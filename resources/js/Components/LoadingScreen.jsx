const LoadingScreen = () => {
    return (
        <>
            <div className="w-screen h-screen flex flex-col gap-y-6 items-center justify-center">
                <div className="bouncing-loader">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p className="font-medium text-lg">Sedang memuat..</p>
            </div>
        </>
    );
};

export default LoadingScreen;
