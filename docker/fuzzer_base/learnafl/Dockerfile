ARG PREFIX
FROM $PREFIX/base

WORKDIR /fuzzer

ENV AFL_NO_X86=1

COPY fuzzer_source/LearnAFL/ /fuzzer/LearnAFL
RUN apt-get install -y python2 python2-dev
RUN cd LearnAFL && \
    make && make install

ENV CC=afl-gcc \
    CXX=afl-g++
