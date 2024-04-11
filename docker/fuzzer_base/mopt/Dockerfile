ARG PREFIX
FROM $PREFIX/base

WORKDIR /fuzzer

ENV AFL_NO_X86=1

RUN git clone https://github.com/puppet-meteor/MOpt-AFL &&\
    cd "MOpt-AFL/MOpt" &&\
#    git checkout a9a5dc5c0c291c1cdb09b2b7b27d7cbf1db7ce7b &&\
    make && make install

ENV CC=afl-gcc \
    CXX=afl-g++
